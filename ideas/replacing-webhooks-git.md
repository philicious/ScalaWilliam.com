---
title: Replacing webhooks with W3 standards
date: 2017-10-31
---

I do a lot of work in Continuous Deployment. Faster, easier validation means far more joy in the work I do.
It's because I dislike repeating myself, I dislike pressing the same button every time - when it could all be done automatically.

I've written about WebSub a little <reference>.

I also run https://git.watch, which I use for production automated deployments.

Git Watch executes custom commands every time a Git push is made, without forcing you to set up a Jenkins server or your own webhook server, with all the complication of firewalls.

WebSub is standardised webhooks. GitHub provides their own flavour of webhooks, where each subscription has to be explicitly allowed and registered via a proprietary GitHub API or interface. This is the one problem with Git Watch - that initial set up.

I'm puzzled why I shouldn't be able to get push events for any open source project on GitHub. Or any open source repo that I am working on. Why not, really? Further, the possibilities that are limited by proprietary webhooks are scary. What if instead of just you, the owner of the public repository, many other people could react to your changes? What if they wanted to do their own automated testing, to give you feedback early?

What if you could test new CI pipelines without having to modify your Git repo?... :-)

Problem with WebSub is the same as any webhooks, which is that you need to have a server. 

I built something a little different, called [websub-execute](https://github.com/ScalaWilliam/websub-execute).
websub-execute uses W3's EventSource standard to connect to a server, which acts as the server on behalf of the client.
When a new event is pushed to that server, the server pushes it back to the client.

The server is implemented as [websub-to-eventsource](https://github.com/scalawilliam/websub-to-eventsource).

The last piece of the puzzle would be a Git repository that supports WebSub. I have a prototype which I shall share later.

Usage looks like this:

```
$ git clone https://git.server/git/some-repo test-repo

# auto-deploy a Scala project with ansible
$ websub-execute -u https://git.server/ -i -- 'cd test-repo && git pull && sbt "show universal:packageZipTarball" && ansible-playbook -i swgit, ansible/prod-playbook.yml'

# push an update of master to GitHub
# note how you couldn't do it the other way round easily ;-)
$ websub-execute -u https://git.server/ -i -- 'cd test-gsw-1 && git pull && git push github HEAD'
```


# The most important Streaming abstraction

It is the pure function:

`accept: (State, Input) => State`

Any mutable, side-effect free code can be rewritten into this form and be reused on any iterator with a `scanLeft` method.

For example, mutably:



Suppose you don't want to output the full state however, but just want to emit an `Output`.
So you create a method `g: State => Option[Output]`, 
which is also isomorphic to `g: PartialFunction[State, Output]` 
and also isomorphic to `g: { def unapply(input: State): Option[Output] }`. Then this becomes:

Now suppose you wanted to perform error reporting but your `f` is to be free of side-effects. So create a function `h: State => Option[Error]`, which is also isomorphic to `h: PartialFunction[State, Error]` and also `h: { def unapply(state: State): Option[Error] } `. 

## Why is this abstraction so powerful and important?

Because this function is not tied to any particular streaming implementation. You can plug it into akka-stream, into an Iterator, into a List, into a ListView, into a while loop, whatever - you are never locked into any one particular way of thinking.

Longer lasting deduplication, different style: 

By using this pure immutable approach, your code can be used from multiple places and even extremely easily tested. Overcomplicate it, and your wiring becomes your "domain logic".

Note that you can reuse this code from now on, in any project, in any sort of implementation. You can even plonk it inside a Free Monad if you wish to do so.
Because it's simple and is the minimal necessary abstraction to get most work done. 

You can test the whole thing step-by-step with simple pure functions.

These things can also be called State Machines. Separate pure logic from side effects, that's all.

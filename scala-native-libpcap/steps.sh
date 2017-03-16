$ git clone https://github.com/ScalaWilliam/scala-native-libpcap.git
$ cd scala-native-libpcap
$ docker run -v $PWD:/snp -it scala-native-sbt
root@248baf99ddc2:/# apt-get -y install libpcap-dev tcpdump
root@248baf99ddc2:/# wget https://github.com/fox-it/quantuminsert/raw/master/presentations/brocon2015/pcaps/id1.cn-inject.pcap
root@248baf99ddc2:/# cd /snp && sbt '~nativeLink'
$ docker exec -it 248baf99ddc2 /snp/target/scala-2.11/snp-out /id1.cn-inject.pcap
$ docker exec -it 248baf99ddc2 /snp/target/scala-2.11/snp-out live cooked
$ docker exec -it 248baf99ddc2 bash -c 'curl -i https://actionfps.com/server-updates/ > /dev/null'
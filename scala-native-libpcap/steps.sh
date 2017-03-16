$ git clone https://github.com/ScalaWilliam/scala-native-libpcap.git
$ cd scala-native-libpcap
$ docker run -v $PWD:/snp -it scala-native-sbt
root@248baf99ddc2:/# apt-get -y install libpcap-dev tcpdump
root@248baf99ddc2:/# wget https://github.com/fox-it/quantuminsert/raw/master/presentations/brocon2015/pcaps/id1.cn-inject.pcap
root@248baf99ddc2:/# cd /snp
root@248baf99ddc2:/snp# sbt 'run -- /root/id1.cn-inject.pcap'
root@248baf99ddc2:/snp# curl -s -i https://actionfps.com/server-updates/ > /dev/null &
root@248baf99ddc2:/snp# ./target/scala-2.11/snp-out live cooked

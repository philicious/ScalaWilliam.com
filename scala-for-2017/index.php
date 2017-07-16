<?php
$title = 'Scala for 2017 talk';
$custom_head = true;
require(dirname(__FILE__) . '/../shared/render.inc.php');
?>
    <meta property="og:site_name" content="Scala William"/>
    <meta property="og:locale" content="en_GB"/>
    <meta name="twitter:card" content="summary"/>
    <meta name="twitter:site" content="@ScalaWilliam"/>
    <meta property="og:title" content="Scala for 2017"/>
    <meta property="og:url" content="https://www.scalawilliam.com/scala-for-2017/"/>
    <meta name="twitter:title" content="Scala for 2017"/>
    <meta name="description"
          content="William covers the new Scala 2.12, Scala's use cases, drawbacks, selling points and recommendations for those interested in incorporating Scala into their application stack - and those Scala users interested in broadening their points of view."/>
    <meta property="og:description"
          content="William covers the new Scala 2.12, Scala's use cases, drawbacks, selling points and recommendations for those interested in incorporating Scala into their application stack - and those Scala users interested in broadening their points of view."/>
    <meta name="keywords" content="scala, sbt, intellij, scalatest, jvm, tdd, spark"/>
    <meta name="twitter:image" content="https://avatars3.githubusercontent.com/u/2464813"/>

<?php echo $top; ?>
    <section class="video">
        <h1>Scala for 2017</h1>
        <style>
            nav ol {
                font-weight: bold;
            }

            input[type=email] {
                border: 1px solid darkred;
                font-size: 1.6em;
                padding: 3px;
                min-width: 300px;
            }

            #references {
                font-size: 0.8em;
            }

            .btn {
                background: #3498db;
                background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
                background-image: -moz-linear-gradient(top, #3498db, #2980b9);
                background-image: -ms-linear-gradient(top, #3498db, #2980b9);
                background-image: -o-linear-gradient(top, #3498db, #2980b9);
                background-image: linear-gradient(to bottom, #3498db, #2980b9);
                -webkit-border-radius: 28;
                -moz-border-radius: 28;
                border-radius: 28px;
                color: #ffffff;
                font-size: 20px;
                padding: 10px 20px 10px 20px;
                text-decoration: none;
            }

            .btn:hover {
                background: #3cb0fd;
                background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
                background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
                background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
                background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
                background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
                text-decoration: none;
            }

            #meetup-card {
                float: right;
            }

            @media only screen and (max-width: 640px) {
                #meetup-card {
                    float: none;
                }
            }
            
        #video iframe {
            width:33em;
            max-width:100%;
            height:18em;
        }
        </style>

        <h2>Video</h2>

        <div id="video"
             style="display:flex; align-items:center; justify-content: center; width:90%;height:20%; background:dimgrey;">
    <iframe src="//www.youtube-nocookie.com/embed/N11rdUvcp7g?rel=0"
                frameborder="0" allowfullscreen></iframe>

        </div>
        <div id="meetup-card">
            <blockquote class="embedly-card" data-card-key="f619efc27f4d4762b14c674b02d068c7" data-card-width="380"
                        data-card-align="left"><h4><a
                            href="https://www.meetup.com/Singapore-Scala-Programmers/events/235904060/">Scala 2.12 -
                        Scala
                        for 2017</a></h4>
                <p>In this talk, William will cover the new Scala 2.12, Scala's use cases, drawbacks, selling points and
                    recommendations for those interested in incorporating Scala into their application stack - and
                    tho</p>
            </blockquote>
            <script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
        </div>

        <div id="get">
            <h2>Slides</h2>
<iframe src="https://docs.google.com/presentation/d/1cExY8soFgL8zdTiEmJwepDuYHmNk2SVEbUflA-vGL3k/embed?start=false&loop=false&delayms=3000" frameborder="0" width="480" height="299" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>        </div>
<div style="clear:both"></div>
        <style>
            #get {
                margin-top: 2em;
                background: rgb(255, 250, 250);
            }

            #get ul {
                list-style-type: none;

            }
        </style>

        <div id="references">
            <h2>References</h2>
            <p>Not yet available.</p>
            <ol style="">
                <li>
                    Meetup: Scala 2.12 - Scala for 2017
                    <br/>
                    <a href="https://www.meetup.com/Singapore-Scala-Programmers/events/235904060/">https://www.meetup.com/Singapore-Scala-Programmers/events/235904060/</a>
                </li>
                <li>SCALA 2.12.0 IS NOW AVAILABLE! <br/>
                    <a href="http://www.scala-lang.org/news/2.12.0">http://www.scala-lang.org/news/2.12.0</a><br/>
                    November 3, 2016
                </li>
                <li>Java 8 compatibility kit for Scala <br/>
                    <a href="https://github.com/scala/scala-java8-compat">https://github.com/scala/scala-java8-compat</a>
                </li>
                <li>
                    Futures in Scala 2.12 <br/>
                    <a href="https://github.com/viktorklang/blog">https://github.com/viktorklang/blog</a>
                </li>
                <li>sbt-jni: Sbt plugin to ease working with JNI
                    <br/>
                    <a href="https://github.com/jodersky/sbt-jni">https://github.com/jodersky/sbt-jni</a></li>
                <li>
                    Introducing Apache Spark 2.0
                    <br/>
                    <a href="https://databricks.com/blog/2016/07/26/introducing-apache-spark-2-0.html">
                        https://databricks.com/blog/2016/07/26/introducing-apache-spark-2-0.html
                    </a>
                </li>
                <li>Dataset API in Spark 2.0
                    <br/>
                    <a href="http://cdn2.hubspot.net/hubfs/438089/notebooks/spark2.0/Dataset.html">http://cdn2.hubspot.net/hubfs/438089/notebooks/spark2.0/Dataset.html</a>
                </li>

                <li>
                    Hands-on Scala.js: Writing client-side web applications in Scala
                    <br/>
                    <a href="http://www.lihaoyi.com/hands-on-scala-js/">http://www.lihaoyi.com/hands-on-scala-js/</a>
                </li>

                <li>
                    Akka 2.4
                    <br/>
                    <a href="http://doc.akka.io/docs/akka/2.4/scala.html">http://doc.akka.io/docs/akka/2.4/scala.html</a>
                </li>

                <li>
                    Play 2.5: Main concepts for Scala
                    <br/>
                    <a href="https://www.playframework.com/documentation/2.5.x/ScalaHome">https://www.playframework.com/documentation/2.5.x/ScalaHome</a>
                </li>

                <li>
                    ScalaTest: Quickstart
                    <br/>
                    <a href="http://www.scalatest.org/quick_start">http://www.scalatest.org/quick_start</a>
                </li>

                <li>kantan-csv
                    <br/>
                    <a href="https://nrinaudo.github.io/kantan.csv/">https://nrinaudo.github.io/kantan.csv/</a></li>

                <li>sbt-native-packager <br/>
                    <a href="http://www.scala-sbt.org/sbt-native-packager/">http://www.scala-sbt.org/sbt-native-packager/</a>
                </li>

                <li>
                    Oracle Java Mission Control: The Ultimate Guide

                    <br/>
                    <a href="http://blog.takipi.com/oracle-java-mission-control-the-ultimate-guide/">
                        http://blog.takipi.com/oracle-java-mission-control-the-ultimate-guide/
                    </a>
                </li>

            </ol>
        </div>
    </section>
<?php echo $foot;

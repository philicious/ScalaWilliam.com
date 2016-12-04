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
        <h2>Scala for 2017</h2>
        <style>
            nav ol {
                max-width: 50%;
                font-weight: bold;
                display: flex;
                list-style-type: none;
                justify-content: space-between;
            }

            #references {
                font-size: 0.8em;
            }
        </style>
        <nav>
            <ol>
                <li><a>YouTube video</a></li>
                <li><a href="#get">Get the slides</a></li>
                <li><a href="#references">References</a></li>
            </ol>
        </nav>

        <h2>Video</h2>

        <div id="video"
             style="display:flex; align-items:center; justify-content: center; width:640px;height:160px; background:dimgrey;">
            <img src="videos-stream-icon.svg"/>
            <p style="padding:1em;font-size:1.3em;font-weight:bold;color:white;">Video coming soon...</p>
            <script src="https://apis.google.com/js/platform.js"></script>

            <div class="g-ytsubscribe" data-channelid="UCRX-zcevzPPkBkUDGMxpHgQ" data-layout="default"
                 data-count="default"></div>
        </div>
<style>
    #get {
        margin-top:2em;
        background:rgb(255,250,250);
    }
    #get ul {
        list-style-type: none;

    }
    #ss-submit {
        font-size:3em;
        font-weight:bold;
    }
</style>
        <div id="get">
        <h2>Get the slides</h2>
        <form action="https://docs.google.com/forms/d/e/1FAIpQLScM0p8XJfA6bB-zrahybK73pzdmxAJsecCkXvHwXCP0mPyZMQ/formResponse"
              method="POST" id="ss-form" target="_self" onsubmit="">
            <ol role="list" class="ss-question-list" style="padding-left: 0;">

                <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="auto" class="ss-item ss-item-required ss-text">
                        <div class="ss-form-entry">
                            <label class="ss-q-item-label" for="entry_1020400141">
                                <div class="ss-q-title">E-mail
                                    <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                                    <span class="ss-required-asterisk" aria-hidden="true">*</span></div>
                                <div class="ss-q-help ss-secondary-text" dir="auto"></div>
                            </label>

                            <input type="email" name="entry.1020400141" value="" class="ss-q-short"
                                   id="entry_1020400141" dir="auto" aria-label="E-mail  Must be a valid email address"
                                   aria-required="true" required="" title="Must be a valid email address">
                        </div>
                    </div>
                </div>
                <div class="ss-form-question errorbox-good" role="listitem">
                    <div dir="auto" class="ss-item  ss-checkbox">
                        <div class="ss-form-entry">
                            <label class="ss-q-item-label" for="entry_1743671591">
                                <div class="ss-q-title">Also send me...
                                </div>
                            </label>


                            <ul class="ss-choices" role="group" aria-label="Also send me...  ">
                                <li class="ss-choice-item">
                                    <label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox"
                                                                                                         name="entry.1034930021"
                                                                                                         value="The video when it&#39;s ready"
                                                                                                         id="group_1034930021_1"
                                                                                                         role="checkbox"
                                                                                                         class="ss-q-checkbox"></span>
                                        <span class="ss-choice-label">The video when it&#39;s ready</span>
                                    </label></li>
                                <li class="ss-choice-item">
                                    <label><span class="ss-choice-item-control goog-inline-block"><input type="checkbox"
                                                                                                         name="entry.1034930021"
                                                                                                         value="My guide &#39;Essential Production Scala&#39; when it&#39;s ready"
                                                                                                         id="group_1034930021_2"
                                                                                                         role="checkbox"
                                                                                                         class="ss-q-checkbox"></span>
                                        <span class="ss-choice-label">My guide &#39;Essential Production Scala&#39; when it&#39;s ready</span>
                                    </label></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="draftResponse" value="[,,&quot;5588546134555980063&quot;]
">
                <input type="hidden" name="pageHistory" value="0">


                <input type="hidden" name="fbzx" value="5588546134555980063">
                <div class="ss-send-email-receipt" style="margin-bottom: 4px;" dir="ltr"><label for="emailReceipt"
                                                                                                style="display:inline;"></label>
                </div>
                <div class="ss-item ss-navigate">
                    <table id="navigation-table">
                        <tbody>
                        <tr>
                            <td class="ss-form-entry goog-inline-block" id="navigation-buttons" dir="ltr">
                                <input type="submit" name="submit" value="Request slides" id="ss-submit"
                                       class="jfk-button jfk-button-action ">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </ol>
        </form>
        </div>

        <div id="references">
            <h2>References</h2>

            <ol>
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

import javax.script.ScriptEngineManager

import scala.beans.BeanProperty

object NashornScalaInteraction extends App {

  /** Creates .setTransformer() and .getTransformer() which Nashorn can access **/
  /** Nashorn supports working with SAM directly, so Scala methods interoperate directly with JavaScript **/
  @BeanProperty
  var transformer: String => String = { str => str.trim }

  configureArguments()

  printOutput()

  def printOutput(): Unit = {
    List("1", "2", " 3 ").map(transformer).foreach(println)
  }

  def configureArguments(): Unit = {
    val scriptingEngine = new ScriptEngineManager().getEngineByName("javascript")
    scriptingEngine.put("me", this)
    args.sliding(2).collect {
      case Array("--js", command) =>
        command
    }.foreach(scriptingEngine.eval)
  }
}

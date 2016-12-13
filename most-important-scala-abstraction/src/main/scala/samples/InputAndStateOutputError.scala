package samples

/**
  * Created by me on 13/12/2016.
  */
trait InputAndStateOutputError extends InputAndStateOutput {
  type Error

  def report(error: Error): Unit

  def extractError(state: State): Option[Error]
}

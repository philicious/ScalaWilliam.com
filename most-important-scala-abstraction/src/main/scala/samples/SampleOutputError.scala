package samples

/**
  * Created by me on 13/12/2016.
  */
case class SampleOutputError(inputAndStateOutputError: InputAndStateOutputError) extends ThreeExamples {

  import inputAndStateOutputError._

  def whileLoop(): Unit = {
    var state: State = initialState
    while (true) {
      extract(state).foreach(dump)
      extractError(state).foreach(report)
      state = accept(state, fetchInput())
    }
  }

  def akkaStream(): Unit = {
    flowInput
      .scan(initialState)(accept)
      .mapConcat { state =>
        extractError(state).foreach(report)
        extract(state).toList
      }
      .runForeach(dump)
  }

  def iterator(): Unit = {
    iteratorInput()
      .scanLeft(initialState)(accept)
      .flatMap { state =>
        extractError(state).foreach(report)
        extract(state)
      }
      .foreach(dump)
  }

  override def tailRecursive(): Unit = {
    def go(state: State): Unit = {
      extractError(state).foreach(report)
      extract(state).foreach(dump)
      go(accept(state, fetchInput()))
    }
    go(initialState)
  }
}

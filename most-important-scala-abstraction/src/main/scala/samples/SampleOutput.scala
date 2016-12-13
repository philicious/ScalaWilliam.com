package samples

import scala.annotation.tailrec

/**
  * Created by me on 13/12/2016.
  */
case class SampleOutput(inputAndStateOutput: InputAndStateOutput) extends ThreeExamples {

  import inputAndStateOutput._

  def whileLoop(): Unit = {
    var state: State = initialState
    while (true) {
      extract(state).foreach(dump)
      state = accept(state, fetchInput())
    }
  }

  def akkaStream(): Unit = {
    flowInput
      .scan(initialState)(accept)
      .map(extract)
      .mapConcat(_.toList)
      .runForeach(dump)
  }

  def iterator(): Unit = {
    iteratorInput()
      .scanLeft(initialState)(accept)
      .flatMap(extract)
      .foreach(dump)
  }

  override def tailRecursive(): Unit = {
    @tailrec
    def go(state: State): Unit = {
      extract(state).foreach(dump)
      go(accept(state, fetchInput()))
    }

    go(initialState)
  }
}

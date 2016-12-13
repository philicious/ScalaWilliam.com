package samples

import akka.NotUsed
import akka.stream.ActorMaterializer
import akka.stream.scaladsl.Source

/**
  * Created by me on 13/12/2016.
  */
trait InputAndState {
  type Input
  type State

  def initialState: State

  def dumpState(state: State): Unit

  def accept(state: State, input: Input): State

  def fetchInput(): Input

  def iteratorInput(): Iterator[Input]

  def flowInput: Source[Input, NotUsed]

  implicit def actorMaterializer: ActorMaterializer
}

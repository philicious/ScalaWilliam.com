package samples

/**
  * Created by me on 13/12/2016.
  */
trait InputAndStateOutput extends InputAndState {
  type Output

  def dump(output: Output): Unit

  def extract(state: State): Option[Output]
}

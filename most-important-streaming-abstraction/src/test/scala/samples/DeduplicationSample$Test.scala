package samples

import org.scalatest.FunSuite
import org.scalatest.Matchers._

/**
  * Created by me on 13/12/2016.
  */
class DeduplicationSample$Test extends FunSuite {

  import DeduplicationSample.Deduplicate.initial

  test("Empty is empty") {
    initial.emit shouldBe empty
  }
  test("Single is emmitted") {
    initial.accept("Stuff").emit shouldBe Some("Stuff")
  }
  test("Two in a row makes one emit") {
    initial.accept("Stuff").accept("Stuff").emit shouldBe empty
  }
  test("Three in a row makes one emit") {
    initial.accept("Stuff").accept("Stuff").accept("Stuff").emit shouldBe empty
  }
  test("X and then Y gives Y at the end") {
    initial.accept("X").accept("Y").emit shouldBe Some("Y")
  }
  test("X and then Y and then Y gives Y") {
    initial.accept("X").accept("Y").accept("Y").emit shouldBe empty
  }
}

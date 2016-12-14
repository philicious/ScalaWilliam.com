package samples

import org.scalatest.FunSuite
import org.scalatest.Matchers._

/**
  * Created by me on 13/12/2016.
  */
class DeduplicationSample$Test extends FunSuite {

  import DeduplicationSample.Deduplicate.initial

  test("Empty is empty") {
    initial.extract shouldBe empty
  }
  test("Single is emmitted") {
    initial.next("Stuff").extract shouldBe Some("Stuff")
  }
  test("Two in a row makes one emit") {
    initial.next("Stuff").next("Stuff").extract shouldBe empty
  }
  test("Three in a row makes one emit") {
    initial.next("Stuff").next("Stuff").next("Stuff").extract shouldBe empty
  }
  test("X and then Y gives Y at the end") {
    initial.next("X").next("Y").extract shouldBe Some("Y")
  }
  test("X and then Y and then Y gives Y") {
    initial.next("X").next("Y").next("Y").extract shouldBe empty
  }
}

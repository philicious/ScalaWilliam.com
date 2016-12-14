package samples


object DeduplicationSample {

  /**
    * accept: (Deduplicate[T], T) => Deduplicate[T]
    * extract: emit: Deduplicate[T] => Option[T]
    */
  case class Deduplicate[T](lastSeen: Option[T], emit: Option[T]) {
    def accept(input: T): Deduplicate[T] = {
      if (lastSeen.contains(input)) copy(emit = None)
      else Deduplicate(Some(input), Some(input))
    }
  }

  object Deduplicate {
    def initial[T]: Deduplicate[T] = Deduplicate(None, None)
  }

  def deduplicationSample(): Unit = {
    Iterator.apply[String]("X", "Y", "Y").scanLeft(Deduplicate.initial[String])(_.accept(_)).flatMap(_.emit)
  }
}

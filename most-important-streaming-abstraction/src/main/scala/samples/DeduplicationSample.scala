package samples


object DeduplicationSample {

  case class Deduplicate[T](lastSeen: Option[T], emit: Option[T]) {
    def extract: Option[T] = emit

    def next(input: T): Deduplicate[T] = lastSeen match {
      case Some(`input`) => Deduplicate(Some(input), None)
      case _ => Deduplicate(Some(input), Some(input))
    }
  }

  object Deduplicate {
    def initial[T]: Deduplicate[T] = Deduplicate(None, None)
  }

  def deduplicationSample(): Unit = {
    Iterator.apply[String]("X", "Y", "Y").scanLeft(Deduplicate.initial[String])(_.next(_)).flatMap(_.extract)
  }

}

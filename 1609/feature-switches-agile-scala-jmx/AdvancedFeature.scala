class AdvancedFeature(staticFeature: StaticFeature)
  extends Feature {
  def execute(inputXml: Elem): Future[Result] = {
    Future(blocking(AdvancedFeature.process(inputXml)))
      .recoverWith {
        case NonFatal(e) => staticFeature.execute(inputXml)
      }
  }
}
object AdvancedFeature {
  def process(inputXml: Elem): Result = ???
}

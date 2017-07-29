class StaticFeature extends Feature {
  def execute(inputXml: Elem): Future[Result] = {
    Future.successful(StaticFeature.staticResult)
  }
}
object StaticFeature {
  val staticResult: Result = ???
}

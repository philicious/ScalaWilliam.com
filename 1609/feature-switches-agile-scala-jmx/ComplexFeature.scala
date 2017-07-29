class ComplexFeature(serviceA: ServiceA, serviceB: ServiceB,
                     advancedFeature: AdvancedFeature) 
  extends Feature {
    def execute(inputXml: Elem): Future[Result] = {
      Future(ComplexFeature.process(serviceA, serviceB))
        .recoverWith {
          case NonFatal(e) => advancedFeature.execute(inputXml)
        }
    }
}
object ComplexFeature {
  def process(serviceA: ServiceA, serviceB: ServiceB):
    Future[Result] = ???
}
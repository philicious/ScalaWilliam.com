trait Feature {
  def execute(inputXml: Elem): Future[Result]
}

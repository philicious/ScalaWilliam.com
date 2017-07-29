package features
trait FeatureConfiguratorMBean {
  def getFeatureLevel: String
  def setFeatureLevel(name: String): Unit
}

package features
class FeatureConfigurator() extends FeatureConfiguratorMBean {
  val platformMBeanServer = ManagementFactory.getPlatformMBeanServer
  val objectName = new ObjectName("app:type=FeatureConfigurator")
  platformMBeanServer.registerMBean(this, objectName)
  def stop(): Unit = {
    platformMBeanServer.unregisterMBean(objectName)
  }
  def getFeatureLevel: String = ???
  def setFeatureLevel(name: String): Unit = ???
}

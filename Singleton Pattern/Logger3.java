public class Logger {

  private FileWriter writer;

  private static final Logger instance;

  private Logger() {

​    File file = new File("/Users/x/log.txt");

​    writer = new FileWriter(file, true); //true 表示追加写入

  }



  public static Logger getInstance() {
     if (instance == null) {

​      synchronized(Logger.class) { // 此处为类级别的锁

​        if (instance == null) {

​          instance =  new Logger();

​        }

​      }

​    }


​    return instance;

  }



  public void log(String message) {

​    writer.write(mesasge);

  }

}

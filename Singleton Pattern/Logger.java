
public class Logger {

  private FileWriter writer;

  private static final Logger instance = new Logger();

  private Logger() {

​    File file = new File("/Users/x/log.txt");

​    writer = new FileWriter(file, true); //true 表示追加写入

  }


  public static Logger getInstance() {

​    return instance;

  }


  public void log(String message) {

​    writer.write(mesasge);

  }

}








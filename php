继承：
1.php在继承的时候会继承父类的所有的方法和属性。
2.由于权限控制，在子类中不能使用父类的私有方法和属性。
3.但在父类中使用自己的私有属性不受影响。


error_log($result."\n\n\n",3,"log.txt");

php每次请求是彼此独立的，响应完了就销毁了，所以不存在常驻。
要想变量保持，只有用swoole这种常驻型的或写在php的扩展里。

##PSR-0规范

    1、命名空间必须和绝对路径一致
    2、类名首字母必须大写
    3、出入口文件外，其他文件必须只有一个类
###spl_autoload_register();    注册给定的函数作为 __autoload 的实现
>**__autoload — 尝试加载未定义的类**
```php 
//假设有两个PHP文件，里边有两个类  都有test方法
spl_autoload_register('autoload1');
spl_autoload_register('autoload2');
Test1::test();
Test2::test();


function autoload1()
{
    require __DIR__.'/'.$class.'php';
}
function autoload2()
{
    require __DIR__.'/'.$class.'php';
}
```

##链式操作

    核心：在每个方法中都设有 'return $this;'

#1、工厂模式

    就是去实例化对象，然后放入注册树

#2、单例模式 --使某个类只允许被创建一次

    1、设置私有的构造函数----防止其他地方实例化对象（节省资源）
```php
    private __construct()
```
    2、设置私有变量，将自己实例化然后返回
```php
    protected $param;
    static public function getInstance()
    {
        if(self::$param)
        {
            return self::$param;
        }else{
            self::$param = new self();
        }
        
    }
```
#3、注册树模式 -- 全局共享和交换对象

```php
class Register
{
    protected static $objects;

    //将工厂实例化对象放入注册树
    static function set($alias,$object)
    {
        self::$objects[$alias] =$object;
    }
    //在用到的地方获取注册书中的对象
    static function  get($alias)
    {
        return self::$objects[$alias];
    }

    //注销注册书中的实例化对象
    static function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }
}

```


#4、适配器模式 --将不同的函数接口封装成同意的api

    1.创建合适的接口

    2.创建每种适配器的实例

#5、策略模式

    将一组特定的行为和算法分装成类，以适应某些特定的环境
#6、观察者模式

    设置事件监听  当一个事件发生时 启动所在设置的事件

    新建一个观察者接口，存放事件出发后的事件，
    新建一个抽象类，存放并且触发观察者的事件
    定义一个类，继承抽象类  写一个事件的方法   然后 存放观察者
    定义一个类 继承观察者接口  写一个出发后的事件

#7、装饰器模式

    先写好自己处理的类 
```php
class things
{
    function put()
    {
        echo "这是要装饰的类";
    }
}
```
    然后写一个装饰器的接口  写好after和before的方法 并且保存和运行接口的方法
```php
class things
{
    function put()
    {
        echo "这是要装饰的类";
    }
}
```
    在自己的类中定义 after和before等状态的方法
class Person:
  def __init__(self, firstname, lastname, age):
    self.firstname = firstname
    self.lastname = lastname
    self.age = age

  def getAge(self):
    print("My age is " + self.age)

class Person:
  def __init__(self, firstname, lastname, age):
    self.firstname = firstname
    self.lastname = lastname
    self.age = age

  def getAge(self):
    print("My age is " + self.age)

class Student(Person):
  pass

x = Student("Mike", "Olsen",20)
x.getAge()

class Bo:
    def __init__(self):
        #biến protected
        self._a = 2
class Con(Bo):
    def __init__(self):
        Bo.__init__(self) 
        print("Calling protected member of Bo class: ")
        print(self._a)
 
obj1 = Con()
obj2 = Bo()
print(obj2.a) # Lỗi vì không thể truy cập _a mặc dù là bố con 


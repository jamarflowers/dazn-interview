"""
Fizz-buzz

replaces the numbers that are
the factors of 3 and 5 with fizz/buzz
"""
x = 0
while x < 100:
    x = x + 1
    if(x % 3 == 0):
        print("fizz")
    elif(x % 5 == 0):
        print("buzz")
    else:
        print(x)

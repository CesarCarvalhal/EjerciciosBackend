def func_factorial(n):
    if n == 0:
        return 1
    elif n == 1:
        return 1
    else:
        return n * func_factorial(n-1)
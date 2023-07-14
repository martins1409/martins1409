#Outra forma de implementar o algoritimo fatorial

i = int(input("Digite o número :"))

def fatorial(n):

    fatorial = 1

    while(n):

        fatorial *= n
        n -= 1

    return fatorial

print(fatorial(i))
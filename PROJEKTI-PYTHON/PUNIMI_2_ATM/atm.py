print("Welcome to ATM-BANKING !!")
password = 1234
provaPasswordit = 3
bilanci = 0

while provaPasswordit != 0:
    passwordiUserit = int(input("Shkruani Password-in Tuaj:"))
    if passwordiUserit != password:
        provaPasswordit -= 1
        print("passwordi gabim!..")
        print(f"Keni edhe {provaPasswordit} mundesi te provoni!.. ")
    else:
        veprimiUserit = input("B : bilanci, D : depozitim, T : terheqje,")
        if veprimiUserit == "B":
            print(f"Bilanci Juaj eshte: {bilanci} euro")

        if veprimiUserit == "D":
            shuma_depozitit = int(input("Shkruani shumen e depozitit"))
            bilanci +=  + shuma_depozitit
            print(f"Keni depozituar {shuma_depozitit} euro")
            print(f"Bilanci Juaj Total eshte: {bilanci} euro")

        if veprimiUserit == "T":
            shuma_terheqjes = int(input("Shkruani shumen per terheqje:"))
            bilanci -= shuma_terheqjes
            print(f"keni terhequr {shuma_terheqjes} euro")
            print(f"Bilanci Juaj Total eshte: {bilanci} euro")

    dalja_userit = input("Deshironi te dilni?. Po/Jo")
    if dalja_userit == "Po":
        print("Faleminderit per vizit")
        break
    else:
        continue

    

    
    







def fungsiangka(angka):
    if angka == 0:
        print("[A,B,C,D,E]")
    elif angka == 1:
        print("[B,C,D,E,A]")
    elif angka == 2:    
        print("[C,D,E,A,B]")
    elif angka == 3:    
        print("[D,E,A,B,C]")
    elif angka == 4:    
        print("[E,A,B,C,D]")
    else:
        print("Data Tidak Ditemukan")
        
huruf = ["A", "B", "C", "D","E"]
print("Masukan Angka")
angka = int(input())
fungsiangka(angka)
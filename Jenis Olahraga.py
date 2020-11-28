def functiontentukanOlahraga(kalori,olahraga):
    w = int()
    w = kalori/10
    print("Jumlah kalori:",kalori," Kalori")
    print("Jenis Olahraga: ",olahraga)
    print("Waktu Olahraga:",w)
    
    
print 
print("Masukan Kalori")
x = int(input())
y = int()
if x >= 750 :
   functiontentukanOlahraga(x,"Lari")
    
elif x >= 500 :
    functiontentukanOlahraga(x,"Badminton")
elif x <= 500:
    functiontentukanOlahraga(x,"Renang")
else:
    print("Maaf data tidak ditemukan")
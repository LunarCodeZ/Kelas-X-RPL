# Zodiac Guesser

month = int(input("Enter Month: "))
date = int(input("Enter Date: "))
zodiac = "Zodiac anda ialah: "

if month >= 1 and month <= 12:

    if month == 1:
        if date >= 1 and date <= 31:
            if date <= 20:
                print(f"{zodiac}Aquarius")
            else:
                print(f"{zodiac}Capricorn")
        else:
            print("Tanggal tidak boleh kurang dari 1 dan lebih dari 31")

    if month == 2:
        if date >= 1 and date <= 28:
            if date <= 18:
                print(f"{zodiac}Aquarius")
            else:
                print(f"{zodiac}Pisces")
        else:
            print("Tanggal tidak boleh kurang dari 1 dan lebih dari 28")

    if month == 3:
        if date >= 1 and date <= 31:
            if date <= 20:
                print(f"{zodiac}Pisces")
            else:
                print(f"{zodiac}Aries")
        else:
            print("Tanggal tidak boleh kurang dari 1 dan lebih dari 31")

    if month == 4:
        if date >= 1 and date <= 30:
            if date <= 19:
                print(f"{zodiac}Pisces")
            else:
                print(f"{zodiac}Taurus")
        else:
            print("Tanggal tidak boleh kurang dari 1 dan lebih dari 30")

    if month == 5:
        if date >= 1 and date <= 31:
            if date <= 20:
                print(f"{zodiac}Taurus")
            else:
                print(f"{zodiac}Gemini")
        else:
            print("Tanggal tidak boleh kurang dari 1 dan lebih dari 31")

    if month == 6:
        if date >= 1 and date <= 30:
            if date <= 20:
                print(f"{zodiac}Gemini")
            else:
                print(f"{zodiac}Cancer")
        else:
            print("Tanggal tidak boleh kurang dari 1 dan lebih dari 30")

    if month == 7:
        if date >= 1 and date <= 31:
            if date <= 22:
                print(f"{zodiac}Cancer")
            else:
                print(f"{zodiac}Leo")
        else:
            print("Tanggal tidak boleh kurang dari 1 dan lebih dari 31")

    if month == 8:
        if date >= 1 and date <= 31:
            if date <= 22:
                print(f"{zodiac}Leo")
            else:
                print(f"{zodiac}Virgo")
        else:
            print("Tanggal tidak boleh kurang dari 1 dan lebih dari 31")

    if month == 9:
        if date >= 1 and date <= 30:
            if date <= 22:
                print(f"{zodiac}Virgo")
            else:
                print(f"{zodiac}Libra")
        else:
            print("Tanggal tidak boleh kurang dari 1 dan lebih dari 30")

    if month == 10:
        if date >= 1 and date <= 31:
            if date <= 22:
                print(f"{zodiac}Libra")
            else:
                print(f"{zodiac}Scorpio")
        else:
            print("Tanggal tidak boleh kurang dari 1 dan lebih dari 31")

    if month == 11:
        if date >= 1 and date <= 30:
            if date <= 21:
                print(f"{zodiac}Scorpio")
            else:
                print(f"{zodiac}Sagittarius")
        else:
            print("Tanggal tidak boleh kurang dari 1 dan lebih dari 30")

    if month == 12:
        if date >= 1 and date <= 31:
            if date <= 21:
                print(f"{zodiac}Sagittarius")
            else:
                print(f"{zodiac}Capricorn")
        else:
            print("Tanggal tidak boleh kurang dari 1 dan lebih dari 31")

else:
    print("Bulan tidak boleh kurang dari 1 dan lebih dari 12")
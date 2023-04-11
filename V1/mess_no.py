dist = []
n = int(input("How many mess? "))
for i in range(1, n+1):
    a = float(input(f'''Enter distance of mess {i} : '''))
    dist.append(a)
dist.sort()
print(dist)

for j in range(len(dist)):

    # serial=int(input("enter serial number:"))
    mess = input(f'''Enter Mess name which is {dist[j]} Km away: ''')
    ratings = (input("Enter ratings : "))
    location = input("Enter location : ")

    with open("mess.txt", "a") as f:
        f.write(f'''
        
    <tr style="height: 46px" class="tdata">
            <td style="text-align: center; width: 5%" class="serial">{j+1}</td>
            <td style="width: 40%" class="mess">{mess}</td>
            <td style="width: 30%">
            <span style="font-size: 14px" class="ratings">{ratings}</span>
            </td>
            <td style="width: 30%">
            <span style="font-size: 14px" class="distance">{dist[j]} Km</span>
            </td>
            <td style="width: 30%">
            <span style="font-size: 14px"><a title="View" href="{location}" target="_blank"
                rel="noopener">View</a></span>
            </td>
            <td style="width: 25%;"><span style="font-size: 14px;" class="contact">
                <a href="tel:123456789" class="" title="Call Now">123456789</a>
            </span></td>
        </tr>

        ''')

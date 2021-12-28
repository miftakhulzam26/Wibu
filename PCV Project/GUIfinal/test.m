latih = xlsread('extract_baru.xlsx');
gambar2 = imread('1.jpg');%sesuaikan nama folder dan file  
gambar = imresize(gambar2,[300,300]);
blue = gambar(:,:,3);
[A, R] = size(blue);
Seg = zeros(A,R);

for k = 1 : A
    for l = 1 : R
        if blue(k,l) > 100
        Seg(k,l)=0;
        else
        Seg(k,l)=1;
        end
    end
end
Seg2 = imfill(Seg);
stats = regionprops(Seg2,'Area','Perimeter','Eccentricity','MajorAxisLength','BoundingBox');
bb = vertcat(stats(:).BoundingBox);
x  = bb(:,1);
y = bb(:,2);
width = bb(:,3);
height = bb(:,4);
w = max(x+width)-x+1;
h = max(y+height)-y+1;
%h = stats.MajorAxisLength;
aspect_ratio = w/h;
area = stats.Area;
perimeter = stats.Perimeter;
metric = 4*pi*area/(perimeter^2);
eccentricity = stats.Eccentricity;
training = [area;perimeter;metric;eccentricity;aspect_ratio]';
hasil = sqrt((latih(:,3)-metric).^2  + (latih(:,4)-eccentricity).^2 + (latih(:,5)-aspect_ratio).^2);
jarak = hasil(:,:);
%data_latih = latih(:,1:5);
pegagan = latih(:,6);
tableA = table(jarak,pegagan);
tableB = sortrows(tableA); 

hasilknn = tableB(1:5,:);


jumlah = sum(hasilknn{:,2});
ya = jumlah;
if ya >= 3
    fprintf('Bukan Pegagan');
else
    fprintf('Pegagan');
end
subplot (1,2,1), imshow(blue), title('Citra Blue');
subplot (1,2,2), imshow(Seg2), title('Citra biner');
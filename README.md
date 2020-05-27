# ValidateAcount
Bước 1: Tạo Pattern

Chúng ta có Email Regular Expression Pattern như sau:

^[_a-z0-9]{6,}$
Mô tả



Bước 2: Tạo phương thức thực thi mẫu trên

Bước 3: Xây dựng mẫu account hợp lệ

123abc_
_abc123
______
123456
abcdefg
Bước 4: Xây dựng mẫu account không hợp lệ

.@
12345
1234_
abcde 
Bước 5: Tạo chương trình thực thi kiểm thử

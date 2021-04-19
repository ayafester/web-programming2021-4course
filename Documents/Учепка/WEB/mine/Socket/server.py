#!/usr/bin/python3
import socket#импортируем библиотеку

sock = socket.socket()#подключаемся
sock.bind(('', 9092))#даем адрес
sock.listen(1) #разрешаем принять подключение

while True:
    conn, addr = sock.accept() #
    print("connected: "+addr[0])

    while True:
        data = conn.recv(1024)
        if not data:
            break
        conn.send(str(int(data.decode('utf-8')) * 2).encode('utf-8'))# послали запрос
    conn.close()

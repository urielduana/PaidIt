import webbrowser
from src import nfc

def read(r, position, number):
    result = []
    while number >= 16:
        result.append(read_16(r, position, 16))
        number -= 16
        position += 1
    return result

def read_16(r, position, number):
    return r.read_binary_blocks(position, number)

def bytes_to_hex_string(bytes_list):
    return ''.join(format(byte, '02X') for byte in bytes_list)

if __name__ == "__main__":
    reader = nfc.Reader()

    reader.load_authentication_data(0x01, [0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF])
    reader.authentication(0x00, 0x61, 0x01)
    
    data_read = read(reader, 0x01, 0x20)
    
    hex_string = bytes_to_hex_string(data_read[0])
    required_hex_portion = hex_string[:16]
    
    base_url = "http://127.0.0.1:8000/employee/orders/member/"
    complete_url = base_url + required_hex_portion.lower()
    
    print("Complete URL:", complete_url)
    
    webbrowser.open(complete_url)

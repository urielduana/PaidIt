from src import nfc

def write_hex_string_as_data(r, position, number, hex_string):
    data = [int(hex_string[i:i+2], 16) for i in range(0, len(hex_string), 2)]
    
    while number >= 16:
        write_16(r, position, 16, data)
        number -= 16
        position += 1

def write_16(r, position, number, data):
    r.update_binary_blocks(position, number, data)

if __name__ == "__main__":
    reader = nfc.Reader()

    reader.load_authentication_data(0x01, [0xFF, 0xFF, 0xFF, 0xFF, 0xFF, 0xFF])
    reader.authentication(0x00, 0x61, 0x01)
    
    # auth_nfc = "18701DB97F9637DF"
    auth_nfc = "0000000000000000"
    write_hex_string_as_data(reader, 0x01, 0x20, auth_nfc)
    print("Hexadecimal data written successfully")

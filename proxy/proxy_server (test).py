from http.server import HTTPServer, BaseHTTPRequestHandler
from datetime import datetime
import re

class RequestHandler(BaseHTTPRequestHandler):
    
    def do_GET(self):
        with open("C:/xampp/htdocs/Securify/proxy/http_request_log.txt", "a") as f:
                f.write("Received {} request:\n".format(self.command))
                f.write(f"Path: {self.path}\n")
                f.write(f"Headers:\n{str(self.headers)}\n")
                f.write(f"Remote Address: {self.client_address[0]}\n")  
                f.write(f"User-Agent: {self.headers.get('User-Agent')}\n")  
                f.write(f"Request Time: {datetime.now()}\n")  
                f.write("---------------------------------------------------\n")

        name_param = None
        if '?' in self.path:
            query_params = self.path.split('?')[1]
            for param in query_params.split('&'):
                if param.startswith('name='):
                    name_param = param.split('=')[1]
                    break
            # 'name=' parametresini ai_input.txt dosyasına yazma
            if name_param:
                with open("C:/xampp/htdocs/Securify/proxy/ai_input.txt", "a") as f:
                    f.write(name_param + "\n")

        with open("C:/xampp/htdocs/Securify/proxy/ai_output.txt", "r") as f:
            response_decision = f.read().strip()

        if name_param and response_decision == '1':
            print("matched")
            self.send_response(403)
            self.end_headers()
            with open("C:/xampp/htdocs/Securify/proxy/http_request_log.txt", "a") as f:
               f.write("Response: 403 Forbidden\n")

        else:
            self.send_response(200)
            self.end_headers()

if __name__ == '__main__':
    server_address = ('', 8000)
    httpd = HTTPServer(server_address, RequestHandler)
    print("Starting server...")
    httpd.serve_forever()

from http.server import HTTPServer, BaseHTTPRequestHandler
from datetime import datetime
class RequestHandler(BaseHTTPRequestHandler):
    
    def do_GET(self):
        with open("http_request_log.txt", "a") as f:
                f.write("Received {} request:\n".format(self.command))
                f.write(f"Path: {self.path}\n")
                f.write(f"Headers:\n{str(self.headers)}\n")
                f.write(f"Remote Address: {self.client_address[0]}\n")  
                f.write(f"User-Agent: {self.headers.get('User-Agent')}\n")  
                f.write(f"Request Time: {datetime.now()}\n")  
                f.write("---------------------------------------------------\n")
        name_param = None
        query_params = self.path.split('?')[1]
        for param in query_params.split('&'):
            if param.startswith('name='):
                name_param = param.split('=')[1]
                break

        with open("C:/xampp/htdocs/Securify/proxy/ai_output.txt", "r") as f:
            forbidden_words = f.read().splitlines()
        if name_param and any(word in name_param for word in forbidden_words):
            print("matched")
            self.send_response(403)
            self.end_headers()
            with open("C:/xampp/htdocs/Securify/proxy/http_request_log.txt", "a") as f:
               f.write("Response: 403 Forbidden\n")

        else:
            self.send_response(200)
            self.end_headers()
            # with open("http_request_log.txt", "a") as f:
            #     f.write("Response: 200 OK\n")

if __name__ == '__main__':
    server_address = ('', 8000)
    httpd = HTTPServer(server_address, RequestHandler)
    print("Starting server...")
    httpd.serve_forever()


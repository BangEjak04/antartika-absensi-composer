from flask import Flask, Response, jsonify
import cv2 as cv
import face

app = Flask(__name__)

# Inisialisasi kamera menggunakan OpenCV
cap = cv.VideoCapture(0)
detected_names = []

def generate_frames():
    global detected_names
    detected_names = []
    while True:
        success, frame = cap.read()
        if not success:
            break
        else:
            # Deteksi wajah pada frame
            frame = face.recognize(frame, face.clf, face.face_cascade)

            # Kumpulkan nama yang dikenali dari frame (misal, nama siswa)
            detected_names = face.get_detected_names()

            # Encode frame ke format JPEG
            ret, buffer = cv.imencode('.jpg', frame)
            frame = buffer.tobytes()

            # Hasilkan frame dalam format streaming
            yield (b'--frame\r\n'
                   b'Content-Type: image/jpeg\r\n\r\n' + frame + b'\r\n')

@app.route('/video_feed')
def video_feed():
    return Response(generate_frames(), mimetype='multipart/x-mixed-replace; boundary=frame')

@app.route('/detected_names')
def detected_names():
    global detected_names
    # Mengirim nama yang dikenali sebagai JSON
    return jsonify(detected_names)

if __name__ == "__main__":
    app.run(host='0.0.0.0', port=5001, debug=True)

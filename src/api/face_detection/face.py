import cv2 as cv

detected_names = []

def draw_boundary(img, classifier, scaleFactor, minNeighbors, color, text, clf):
    global detected_names
    detected_names = []
    gray_image = cv.cvtColor(img, cv.COLOR_BGR2GRAY)
    features = classifier.detectMultiScale(gray_image, scaleFactor, minNeighbors)

    for (x, y, w, h) in features:
        cv.rectangle(img, (x, y), (x + w, y + h), color, 2)
        id, pred = clf.predict(gray_image[y:y + h, x:x + w])
        confidence = int(100 * (1 - pred / 300))

        if confidence > 77:
            if id == 1:
                name = "Aldi"
            elif id == 2:
                name = "Rizki"
            elif id == 3:
                name = "Ageng"
            detected_names.append(name)
            cv.putText(img, name, (x, y - 5), cv.FONT_HERSHEY_SIMPLEX, 0.8, color, 1, cv.LINE_AA)
        else:
            # detected_names.append("UNKNOWN")
            cv.putText(img, "UNKNOWN", (x, y - 5), cv.FONT_HERSHEY_SIMPLEX, 0.8, (0, 0, 255), 1, cv.LINE_AA)

    return img

def recognize(img, clf, face_cascade):
    return draw_boundary(img, face_cascade, 1.1, 10, (255, 255, 255), "Face", clf)

def get_detected_names():
    return detected_names

# Initialize face classifier and recognizer once
face_cascade = cv.CascadeClassifier("face_detection/haarcascade_frontalface_default.xml")
clf = cv.face.LBPHFaceRecognizer_create()
clf.read("face_detection/classifier.xml")

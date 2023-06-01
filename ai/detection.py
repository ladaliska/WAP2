from imageai.Detection import ObjectDetection
detector = ObjectDetection()
detector.setModelTypeAsYOLOv3()
detector.setModelPath("yolov3.pt")
detector.loadModel()
detections = detector.detectObjectsFromImage(input_image="input/image;.jpg", output_image_path="output.jpg")
for eachObject in detections:
    print(eachObject["name"] , " : ", eachObject["percentage_probability"])
    print("--------------------------------")
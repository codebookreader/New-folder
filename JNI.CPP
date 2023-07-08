#include <iostream>
#include <jni.h>

using namespace std;

JNIEXPORT jstring JNICALL Java_MyJNI_helloWorld(JNIEnv* env, jobject obj) {
    return (*env)->NewStringUTF(env, "Hello from C/C++!");
}


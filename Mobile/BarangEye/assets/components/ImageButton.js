import React from "react";
import {Text, StyleSheet, TouchableOpacity} from 'react-native';


export default function ImageButton({title, onPress}){
    return(
        <>
            <TouchableOpacity onPress={onPress} activeOpacity={0.09} style={styles.imageButton}>
                <Text style={styles.title}>{title}</Text>
            </TouchableOpacity>
        </>
    )
}

const styles = StyleSheet.create({
    imageButton: {
        backgroundColor: 'rgba(0,0,0,0.29)',
        width: "100%",
        height: "100%",
        position: 'absolute',
        bottom: 0,
        left: 0,
        borderRadius: 20,
    },

    title: {
        fontSize: 0,
        color: 'white'
    }
})
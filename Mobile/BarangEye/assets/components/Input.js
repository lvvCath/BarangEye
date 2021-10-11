import React from 'react';
import { View, StyleSheet, Image, Dimensions } from 'react-native';
import { TextInput } from 'react-native-gesture-handler';


export default function Input({ placeholder, onChangeText }) {
    return (
        <>
            <View style={styles.inputContainer}>
                <View>
                    <Image
                        style={{position: 'absolute', left: 6, top: 10}}
                        source={require('../img/Dashboard/search.png')} />
                </View>
                <View>
                    <TextInput placeholder="search" placeholderTextColor='#aaa' style={styles.input} />
                </View>
            </View>
        </>
    );
}

const { width, heigth } = Dimensions.get('screen');

const styles = StyleSheet.create({
    inputContainer: {
        backgroundColor: '#fff',
        width: width / 1.1,
        flexDirection: 'row',
        padding: 5,
        marginTop: 10,
        borderRadius: 20,

        shadowColor: "#000",
        shadowOffset: {
            width: 5,
            height: 5
        },
        shadowOpacity: .8,
        shadowRadius: 1.33,
        elevation: 30
    },

    input: {
        color: '#000',
        marginLeft: 35,
        padding: 7,
        fontSize: 17
    }
})
import React from 'react';
import { Text, StyleSheet, Dimensions, ImageBackground, View } from 'react-native';

export default function Card1({ person, position, image, onPress }) {
    return (
        <>
            <View style={styles.card}>
                <View>
                    <ImageBackground source={image} imageStyle={{ borderRadius: 20}} style={{ width: '100%', height: '100%', borderRadius: 20 }} resizeMode='cover'>
                        <View style={{marginTop: 407, backgroundColor: 'rgba(255, 255, 255, 0.8)', borderRadius: 20}}>
                            <Text style={styles.cardTitle}>{person}</Text>
                            <Text style={styles.cardDate}>{position}</Text>
                        </View>
                    </ImageBackground>

                </View>
                <View>

                </View>
            </View>
        </>
    );
}

const { width, height } = Dimensions.get("screen");

const styles = StyleSheet.create({
    card: {
        marginVertical: 10,
        backgroundColor: '#485461',
        paddingVertical: 8,
        paddingHorizontal: 15,
        width: width / 1,
        borderRadius: 20,
        marginHorizontal: 1,
        paddingTop: 15,
        paddingBottom: 15,

        shadowColor: '#000',
        shadowOffset: {
            width: 2,
            height: 2,
        },
        shadowOpacity: 0.3,
        shadowRadius: 1.5,
        elevation: 30
    },

    cardTitle: {
        fontWeight: '800',
        fontSize: 28,
        marginLeft: 10,
        color: '#000'

    },

    cardDate: {
        fontWeight: '600',
        marginLeft: 10,
        fontSize: 20,
        color: '#000'
    },

});

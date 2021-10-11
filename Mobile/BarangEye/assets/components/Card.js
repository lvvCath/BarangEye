import React from 'react';
import { Text, StyleSheet, Dimensions, Image, View } from 'react-native';

export default function Card({ category, date, description, image}) {
    return (
        <>
            <View style={styles.card}>
                <View style={{justifyContent: 'center'}}>
                    <Text style={styles.cardTitle}>{category}</Text>
                    <Text style={styles.cardDate}>{date}</Text>
                    <Text style={styles.cardDescription}>{description}</Text>
                </View>             
                <View style={styles.icon}>
                    <Image source={require('../img/Dashboard/icons/like.png')} />
                    <Image style={{marginHorizontal: 10}} source={require('../img/Dashboard/icons/chat.png')} />
                </View>
            </View>
        </>
    );
}

const { width, height } = Dimensions.get("screen");

const styles = StyleSheet.create({
    card: {
        marginVertical: 10,
        backgroundColor: '#f5f5f5',
        borderColor: '#000',
        paddingVertical: 8,
        paddingHorizontal: 15,
        width: width / 1.11,
        marginHorizontal: 20,
        borderRadius: 20,
        alignContent: 'center',

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
        fontWeight: 'bold',
        fontSize: 26,
        marginLeft: 5,
        color: '#000'

    },

    cardDate: {
        marginLeft: 5,
        fontSize: 18,
        color: '#000',
        fontWeight: '400'
    },

    cardDescription: {
        fontSize: 16,
        margin: 5,
        marginVertical: 5,
        color: '#000',
        fontWeight: '400'
    },

    icon: {
        flexDirection: 'row',
        marginLeft: 5,
        paddingVertical: 10,
    }
});

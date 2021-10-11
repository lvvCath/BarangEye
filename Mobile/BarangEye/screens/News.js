import React, { Component } from 'react';
import { View, StyleSheet, Text, ImageBackground, Dimensions, Animated, Easing, ScrollView } from 'react-native';
import { FlatList } from 'react-native-gesture-handler';

import Card from '../assets/components/Card';

const { width, height } = Dimensions.get('screen');

export default class News extends React.Component {
    state = {
        alignment: new Animated.Value(height),
        cardAlignment: new Animated.Value(400),
        cards: [
            {
                category: "PhilSys registration",
                date: "2021-10-03 08:45:38",
                description: "The Philippine Statistics Authority thru its PhilSys registration centers are now catering children from 5 to 14 years olds provided that they are accompanied by their parents.",
                //image: require('../assets/img/1.jpg')
            },
            {
                category: "Vaccine Schedule",
                date: "2021-10-03 08:45:38",
                description: "Maayong Hapon sa Tanan. Amon lang KLARUHON nga ang naka schedule sa vaccine bwas nga adlaw amo lang ang GINTAWGAN KAG NAG SUGOT NGA MAGPABAKUNA. Damo pa ang nag submit sang forms nga naka linya para sa bakuna. Aton hulaton ang tawag para sa inyo schedule. Ang sa mga wala ID Indi mag problema kay may ara taga Barangay pareho sang aton mga BHW ang maga assist kag magapamatuod kag mag kilala nga ikaw gid Ina nga persona sa listahan. Madamo gid nga salamat.",
                image: ''
            },
            {
                category: "BACIWAD Water Advisory",
                date: "2021-10-04 13:29:52",
                description: "Afftected Area: Brgy. Ma-ao Temporary Water Interruption this coming FRIDAY (April 16, 2021) from 8:00am to 10:00pm due to maintenance schedule to improve the quality of our service. We advice to please stock/save water to avoid inconvenience. Thank You"
            },
        ],
    };

    AnimateUI = () => {
        Animated.sequence([
            Animated.timing(this.state.alignment, {
                toValue: height / 4,
                duration: 800,
                easing: Easing.back(),
                useNativeDriver: false,
            }),
            Animated.timing(this.state.cardAlignment, {
                toValue: 0,
                duration: 700,
                easing: Easing.ease,
                useNativeDriver: false,
            })
        ]).start();
    };

    componentDidMount() {
        this.AnimateUI();
    }

    render() {
        const AnimatedBackground = {
            height: this.state.alignment,
        };

        const AnimatedCards ={
            transform: [
                {
                    translateX: this.state.cardAlignment,
                },
            ],
        };

        return (
            <View style={{backgroundColor: '#74808e'}}>
                <Animated.View style={[{ width: width, marginBottom: 8 }, AnimatedBackground]}>
                    <ImageBackground style={styles.backgroundImage} source={require('../assets/img/Dashboard/news.png')} />
                </Animated.View>
                {/* <View style={{ alignItems: 'center', marginTop: -40 }}>
                    <Input />
                </View> */}
                <Animated.View style={[AnimatedCards]}>
                        <FlatList
                            contentContainerStyle={{paddingBottom: 440}}
                            data={this.state.cards}
                            renderItem={({item}) => (
                                <Card
                                    category={item.category}
                                    date={item.date}
                                    description={item.description}
                                    image={item.image}
                                />
                            )}
                        >
                        </FlatList>
                </Animated.View>
            </View>
        );
    }
}

const styles = StyleSheet.create({
    backgroundImage: {
        width: '100%',
        height: '100%',
    },

});


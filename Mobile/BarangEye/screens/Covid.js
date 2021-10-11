import React, { Component } from 'react';
import { View, StyleSheet, Image, Text, ImageBackground, Dimensions, Animated, Easing } from 'react-native';
import LinearGradient from 'react-native-linear-gradient';
import { ScrollView } from 'react-native-gesture-handler';

const { width, height } = Dimensions.get('screen');

export default class Covid extends React.Component {
    state = {
        alignment: new Animated.Value(height),
    };

    AnimatedBackground = () => {
        Animated.timing(this.state.alignment, {
            toValue: height / 4,
            duration: 800,
            easing: Easing.back(),
            useNativeDriver: false,
        }).start();
    };

    componentDidMount() {
        this.AnimatedBackground();
    }

    render() {
        const AnimatedBackground = {
            height: this.state.alignment,
        };

        return (
            <View>
                <Animated.View style={[{ width: width }, AnimatedBackground]}>
                    <ImageBackground style={styles.backgroundImage} source={require('../assets/img/Dashboard/covid1.png')} />
                </Animated.View>
                <View>
                    <ScrollView 
                    style={{backgroundColor: '#d7e1ec'}}
                    contentContainerStyle={{paddingBottom: 425}}
                    scrollEnabled={false}
                    showsVerticalScrollIndicator={false}>
                        <View style={{ marginTop: 8, justifyContent: 'center', flexDirection: 'row' }}>
                            <View style={styles.imageViewHeader}>
                                <LinearGradient
                                    colors={['#045de9', '#09c6f9']}
                                    style={styles.imageHeader}>
                                    <View style={{ alignItems: 'center', marginVertical: -3 }}>
                                        <Text style={{ fontSize: 20, color: '#000', fontWeight: '400' }}>Community Quarantine Status</Text>
                                        <Text style={{ fontSize: 50, color: '#000', fontWeight: '800' }}>G C Q</Text>
                                        <Text style={{ fontSize: 20, color: '#000', fontWeight: '800', textDecorationLine: 'underline' }}>General Community Quarantine</Text>
                                    </View>
                                </LinearGradient>
                            </View>
                        </View>
                        <View style={styles.imageContainer}>
                            <View style={styles.imageViewHeader}>
                                <LinearGradient
                                    colors={['#f9c1b1', '#fb8085']}
                                    style={styles.imageHeader}>
                                     <View style={{ alignItems: 'center', justifyContent: 'center', marginVertical: 8}}>
                                     <Text style={{ fontSize: 20, color: '#000', fontWeight: '400' }}>Active Cases</Text>
                                        <Text style={{ fontSize: 50, color: '#000', fontWeight: '800' }}>343</Text>
                                     </View>
                                </LinearGradient>
                            </View>
                        </View>
                        <View style={styles.imageContainer}>
                            <View style={styles.imageView}>
                                <LinearGradient
                                    colors={['#deebdd', '#bbdbbe']}
                                    style={styles.imageHeader}>
                                     <View style={{ alignItems: 'center', justifyContent: 'center', marginVertical: 8}}>
                                     <Text style={{ fontSize: 20, color: '#000', fontWeight: '400' }}>Recovered</Text>
                                        <Text style={{ fontSize: 50, color: '#000', fontWeight: '800' }}>343</Text>
                                     </View>
                                </LinearGradient>
                            </View>
                            <View style={styles.imageView}>
                                <LinearGradient
                                    colors={['#d9d9d9', '#f6f2f2']}
                                    style={styles.imageHeader}>
                                     <View style={{ alignItems: 'center', justifyContent: 'center', marginVertical: 8}}>
                                     <Text style={{ fontSize: 20, color: '#000', fontWeight: '400' }}>Deceased</Text>
                                        <Text style={{ fontSize: 50, color: '#000', fontWeight: '800' }}>11</Text>
                                     </View>
                                </LinearGradient>
                            </View>
                        </View>
                        <View style={styles.imageContainer}>
                            <View style={styles.imageViewHeader}>
                                <LinearGradient
                                    colors={['#045de9', '#09c6f9']}
                                    style={styles.imageHeader}>
                                     <View style={{ alignItems: 'center', justifyContent: 'center', marginVertical: 8}}>
                                     <Text style={{ fontSize: 20, color: '#000', fontWeight: '400' }}>Total Cases</Text>
                                        <Text style={{ fontSize: 50, color: '#000', fontWeight: '800' }}>951</Text>
                                     </View>
                                </LinearGradient>
                            </View>
                        </View>
                    </ScrollView>
                </View>
            </View>
        );
    }
}

const styles = StyleSheet.create({
    backgroundImage: {
        width: '100%',
        height: '100%'
    },

    imageContainer: {
        flexDirection: 'row',
        marginTop: 10,
        justifyContent: 'center'
    },

    imageViewHeader: {
        width: 380,
        height: height / 7.15,
        marginHorizontal: 10,
    },

    imageView: {
        width: width / 2.3,
        height: height / 7,
        marginHorizontal: 8
    },

    imageHeader: {
        width: '100%',
        height: '100%',
        borderRadius: 20
    },

    image: {
        width: '100%',
        height: '100%',
        borderRadius: 20
    }

});


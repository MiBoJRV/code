import * as pkg from '@react-spring/web';
import { COLORS } from 'src/constants';
const { useSpring } = pkg;

type TextColorType = {
  textColorSprings: {
    color: pkg.SpringValue<string>;
  };
};

export const useColoredText = (delay?: number): TextColorType => {
  const textColorSprings = useSpring({
    from: { color: COLORS.GREY },
    to: { color: COLORS.LIGHT_BLUE },
    delay,
  });

  return {
    textColorSprings,
  };
};

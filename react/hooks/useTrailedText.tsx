import * as pkg from '@react-spring/web';
const { useTrail } = pkg;

type TextColorType = {
  trail: {
    opacity: pkg.SpringValue<number>;
    height: pkg.SpringValue<number>;
  }[];
};

export const useTrailedText = (trailsLengts: number): TextColorType => {
  const trail = useTrail(trailsLengts, {
    from: { opacity: 0, height: 0 },
    to: { opacity: 1, height: 40 },
    config: { mass: 5, tension: 2000, friction: 200, duration: 150 },
  });

  return {
    trail,
  };
};

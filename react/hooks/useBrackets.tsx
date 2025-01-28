import { useEffect, useRef, useState } from 'react';
import * as pkg from '@react-spring/web';
const { useSpring, config, easings } = pkg;

export const useBrackets = () => {
  const widthRef = useRef<HTMLDivElement>(null);
  const heightRef = useRef<HTMLDivElement>(null);

  const [height, setHeight] = useState<number | undefined>();
  const [width, setWidth] = useState<number | undefined>();

  useEffect(() => {
    if (heightRef.current) {
      setHeight(heightRef.current?.getBoundingClientRect().height);
    }
  }, [heightRef]);

  useEffect(() => {
    if (!width) {
      setWidth(widthRef.current?.getBoundingClientRect().width);
    }
  }, [width]);

  const bracketLeft = useSpring({
    from: { x: ((width || 0) - 60) / 2, opacity: 0 },
    to: { x: 0, opacity: 1 },
    delay: 100,
    config: config.molasses,
  });
  const bracketRight = useSpring({
    from: { x: -((width || 0) - 60) / 2, opacity: 0 },
    to: { x: 0, opacity: 1 },
    delay: 100,
    config: config.molasses,
  });
  const centerContent = useSpring({
    from: { opacity: 0 },
    to: { opacity: 1 },
    delay: 1000,
    config: {
      duration: 1500,
      easing: easings.easeInQuad,
    },
  });

  return {
    heightRef,
    height,
    widthRef,
    width,
    bracketLeft,
    bracketRight,
    centerContent,
  };
};
